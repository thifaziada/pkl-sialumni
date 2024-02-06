@extends('admin.layouts.navigation')
@section('content')
<div class="main_container">
    <div class="container mt-5">
      <div class="card">
        <div class="card-content">
          <h2 class="text-2xl font-semibold mb-6">Admin Management FAQ</h2>
  
          <div class="overflow-x-auto">
              <table>
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Pertanyaan</th>
                          <th>Jawaban</th>
                          <th>Status</th>
                          <th>Kolom Jawaban</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($faqs as $faq)
                      <tr>
                          <td>{{ $faq->id }}</td>
                          <td>{{ $faq->question }}</td>
                          <td>{{ $faq->answer ? 'Sudah dijawab' : 'Belum dijawab' }}</td>
                          <td>{{ $faq->status }}</td>
                          <td class="text-center">
                              @if (!$faq->answer)
                                  <form action="{{ route('admin.answer.faq', $faq->id) }}" method="post">
                                      @csrf
                                      <textarea name="answer" rows="3" cols="30" placeholder="Masukkan jawaban"></textarea>
                                      <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mx-auto">Submit Jawaban</button>
                                  </form>
                              @endif
                          </td>
                          <td>
                              <div class="btn-group" role="group">
                                  <a href="{{ route('admin.approve.faq', $faq->id) }}" class="btn btn-success" method="post">Approve</a>
                                  <a href="{{ route('admin.reject.faq', $faq->id) }}" class="btn btn-danger" method="post">Reject</a>
                              </div>
                          </td>                                                                     
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
      function confirmDelete() {
          Swal.fire({
              title: 'Are you sure?',
              text: 'You want to delete this story',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
              if (result.isConfirmed) {
                  document.getElementById('delete-event-form').submit();
              }
          });
      }
  </script>
  @if($message = Session::get('success'))
  <script>
      Swal.fire({
          icon: 'success',
          title: 'Success!',
          text: '{{ $message }}',
          confirmButtonColor: '#2ea345',
      })
  </script>
  @endif
  @endsection
  
  <style>
  @import url('https://fonts.googleapis.com/css?family=Montserrat:400&display=swap');
  .main_container {
    margin-left: 150px;
    padding: 20px;
    margin-top: 30px;
  }
  .card {
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }
  
  .card-content {
    padding: 20px;
    margin-bottom: 20px;
  }
  
  .body {
      font-family: 'Arial', sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
  }
  
  table {
      width: 100%;
      border-collapse: collapse;
  }
  
  th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
  }
  
  th {
      background-color: #dfdfe0;
      margin-top: 30px;
      text-align: center;
      }
  
  .text-center {
      text-align: center;
  }
  
  textarea {
      width: 100%;
      height: 80px;
      padding: 8px;
      margin-bottom: 8px;
      box-sizing: border-box;
  }
  
  button {
      padding: 8px 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
  }
  
  .btn-group {
      display: flex;
      align-items: center;
  }
  
  .btn-group a {
      text-decoration: none;
      display: inline-block;
      padding: 8px 16px;
      margin-right: 8px;
      color: white;
      border-radius: 4px;
      cursor: pointer;
  }
  
  .btn-success {
      background-color: #28a745;
  }
  
  .btn-danger {
      background-color: #dc3545;
  }
  </style>