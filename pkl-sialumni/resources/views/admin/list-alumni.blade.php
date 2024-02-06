@extends('admin.layouts.navigation')
@section('content')
<div class="main_container">
  <div class="container mt-5">
    <div class="card">
      <div class="card-content">
        <h2>Admin <b>Management Akun Alumni</b></h2>

        <div class="flex items-center mb-4">
          <!-- Category Dropdown -->
          <label for="category" class="mr-6">Category:</label>
          <select id="category" class="border rounded px-2 py-1">
            <option value="">Select an option</option>
            <option value="name">Name</option>
            <option value="join_year">Join Year</option>
            <option value="leave_year">Leave Year</option>
          </select>

          <!-- Search Input -->
          <label for="search" class="ml-7 mr-5">Search:</label>
          <input type="text" id="search" placeholder="Type your search here..." class="ml-2">

        </div>

        <div class="overflow-x-auto">
          <table class="table table-compact">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Join Year</th>
                <th>Leave Year</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($alumnis as $alumni)
              <tr>
                <td>{{ $alumni->id }}</td>
                <td>{{ $alumni->first_name }} {{ $alumni->last_name }}</td>
                <td>{{ $alumni->email }}</td>
                <td>{{ $alumni->join_year }}</td>
                <td>{{ $alumni->leave_year }}</td>
                <td>{{ $alumni->status }}</td>
                <td>
                  @if ($alumni->status != 'verified')
                  <a href="{{ route('admin.verify', ['id' => $alumni->id]) }}" class="btn btn-primary verify-button">Verify</a>
                  @else
                      <span class="text-success verified-status">Verified</span>
                  @endif
                  </td>                  
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        {{-- <div class="pagination">
          {{ $alumnis->links() }}
      </div> --}}
      </div>
    </div>
  </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    
      var categoryDropdown = document.getElementById("category");
      var searchInput = document.getElementById("search");
    
      searchInput.addEventListener("input", function() {
    
        var selectedCategory = categoryDropdown.value.toLowerCase();
    
        var searchQuery = searchInput.value.toLowerCase();
    
        filterData(selectedCategory, searchQuery);
      });
    });
    
    function filterData(category, query) {
    
      var rows = document.querySelectorAll("table.table tbody tr");
    
      rows.forEach(function(row) {
        var dataCell = row.querySelector("td:nth-child(" + getCategoryIndex(category) + ")");
        if (dataCell) {
          var rowData = dataCell.textContent.toLowerCase();
          row.style.display = rowData.includes(query) ? "" : "none";
        }
      });
    }
    
    function getCategoryIndex(category) {
    
      var categoryMap = {
        "name": 2,
        "join_year": 4,
        "leave_year": 5
      };
      return categoryMap[category] || 2;
    }
</script>

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
}

.table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 1rem;
}

.table th, .table td {
  padding: 12px 15px;
  text-align: center;
  border-bottom: 1px solid #e2e8f0;
}

.table th {
  background-color: #dfdfe0;
}

.table tbody tr:hover {
  background-color: #d6d7d9;
}

.btn {
  display: inline-block;
  font-weight: 600;
  padding: 8px 16px;
  font-size: 14px;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.btn-primary {
  color: #fff;
  background-color: #28a745;
  border: 1px solid #28a745;
}

.btn-primary:hover {
  background-color: #9ad973;
}

.flex {
  display: flex;
  align-items: center;
  margin-top: 10px;
  margin-bottom: 10px;
}

#category,
#search {
  border: 1px solid #669c47;
  border-radius: 3rem; 
  padding: 0.5rem 1rem;
  font-size: 1rem; 
  line-height: 1.6;
  width: 700px;
  transition: border-color 0.3s ease;
}

#category {
  width: 400px;
}

#category:focus,
#search:focus {
  outline: none;
  border-color: #acda96;
}

#category:hover {
  background-color: #ffffff;
}

#search:hover {
  background-color: #ffffff;
}

#category {
  margin-right: 1rem;
}
.verify-button {
  background-color: #007bff; 
  color: #fff;
  padding: 8px 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.verified-status {
  color: #28a745;
  font-weight: bold;
}

</style>