<?php

namespace App\Http\Controllers;

use App\Charts\AlumniDataChart;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Alumni;
use App\Models\Faq;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLoginView(): View
    {
        return view('admin.login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        if ($request->authenticate()) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('login.admin')->with('error', 'Invalid credentials');
    }

    public function dashboard(AlumniDataChart $chart)
    {
        $AlumniDataChart = $chart->build();
        $alumniCount = Alumni::count();
        $faqCount = Faq::count();

        return view('admin.dashboard', compact('alumniCount', 'faqCount', 'AlumniDataChart'));
    }

    public function ListAlumni()
    {
        $alumnis = Alumni::latest()->paginate(5);

        return view('admin.list-alumni', compact('alumnis'));
    }

    public function verifyAlumni($id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->status = 'verified';
        $alumni->save();

        return redirect()->back()->with('success', 'Alumni successfully verified.');
    }

    public function ListPertanyaan()
    {

        $faqs = Faq::orderBy('id', 'asc')->paginate(10);

        $pendingFaqs = Faq::where('status', 'pending')->get();

        return view('admin.list-questions', compact('faqs','pendingFaqs'));
    }

    public function verify($id)
    {
        $alumnis = Alumni::find($id);

        if ($alumnis) {
            // Update status alumni menjadi 'verified'
            $alumnis->status = 'verified';
            $alumnis->save();

            return redirect()->back()->with('success', 'Alumni successfully verified.');
        } else {
            return redirect()->back()->with('error', 'Alumni not found.');
        }
    }

    public function answerFaq(Request $request, $id)
    {
        $this->validate($request, [
            'answer' => 'required|string',
        ]);

        $faqs = Faq::findOrFail($id);

        $faqs->update([
            'answer' => $request->input('answer'),
        ]);

        return redirect()->back()->with('success', 'Answer saved successfully.');
    }
    public function approve($id)
    {
        $faqs = Faq::findOrFail($id);
        $faqs->status = 'approved';
        $faqs->save();
        return redirect()->back()->with('success', 'Question successfully approved.');
    }

    public function reject($id)
    {
        $faqs = Faq::findOrFail($id);
        $faqs->status = 'rejected';
        $faqs->save();
        return redirect()->back()->with('success', 'Pertanyaan berhasil ditolak.');
    }
}
