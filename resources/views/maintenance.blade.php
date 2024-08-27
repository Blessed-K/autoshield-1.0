<!-- resources/views/maintenance/index.blade.php -->

@extends('layouts')

@section('content')
<div class="container">
    <h2>Car Maintenance Schedule</h2>

    <!-- Success Message -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <!-- Display Maintenance Tasks in a Table -->
    <table class="table table-bordered mt-3">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Tel</th>
            <th>Date</th>
            <th>Time</th>
            <th>Service</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bookings as $task)
        <tr>
            <td>{{ $task->c_name }}</td>
            <td>{{ $task->email }}</td>
            <td>{{ $task->phone }}</td>
            <td>{{ $task->date_of_appointment }}</td>
            <td>{{ $task->time_of_appointment }}</td>
            <td>{{ $task->service }}</td>
            <td>
                <!-- Edit Button -->
                <button type="button" class="btn btn-primary" onclick="editTask({{ $task }})">Edit</button>

                <!-- Delete Button -->
                <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $task->id }})">Delete</button>
            </td>
        </tr>
        @endforeach
    </table>

    <!-- Form for Creating/Updating Maintenance Task -->
    <h3 id="form-title">Schedule New Maintenance Task</h3>
    <form id="maintenance-form" action="{{ route('maintenance.store') }}" method="POST">
        @csrf
        <input type="hidden" name="_method" id="form-method" value="POST">
        <input type="hidden" name="task_id" id="task-id" value="">

        <div class="form-group">
            <label for="car_name">Car Name</label>
            <input type="text" name="car_name" class="form-control" id="car-name" placeholder="Enter Car Name" required>
        </div>

        <div class="form-group">
            <label for="task">Task</label>
            <input type="text" name="task" class="form-control" id="task" placeholder="Enter Task" required>
        </div>

        <div class="form-group">
            <label for="scheduled_date">Scheduled Date</label>
            <input type="date" name="scheduled_date" class="form-control" id="scheduled-date" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" placeholder="Enter Description"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
        <button type="button" class="btn btn-secondary" onclick="resetForm()">Cancel</button>
    </form>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this maintenance task?
            </div>
            <div class="modal-footer">
                <form id="delete-form" action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function editTask(task) {
        // Update form title and method
        document.getElementById('form-title').innerText = 'Update Maintenance Task';
        document.getElementById('form-method').value = 'PUT';
        document.getElementById('maintenance-form').action = `/maintenance/${task.id}`;
        
        // Populate the form with task data
        document.getElementById('task-id').value = task.id;
        document.getElementById('car-name').value = task.car_name;
        document.getElementById('task').value = task.task;
        document.getElementById('scheduled-date').value = task.scheduled_date;
        document.getElementById('description').value = task.description;
    }

    function resetForm() {
        // Reset form fields
        document.getElementById('form-title').innerText = 'Schedule New Maintenance Task';
        document.getElementById('form-method').value = 'POST';
        document.getElementById('maintenance-form').action = `{{ route('maintenance.store') }}`;
        document.getElementById('task-id').value = '';
        document.getElementById('car-name').value = '';
        document.getElementById('task').value = '';
        document.getElementById('scheduled-date').value = '';
        document.getElementById('description').value = '';
    }

    function confirmDelete(taskId) {
        // Show the delete confirmation modal
        $('#deleteModal').modal('show');
        document.getElementById('delete-form').action = `/maintenance/${taskId}`;
    }
</script>
@endsection
