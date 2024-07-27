<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tables</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Coaches</h2>
        <table id="coachTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>ZIP</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Action</th> <!-- New column for actions -->
                </tr>
            </thead>
            <tbody>
                <!-- DataTables will populate data here -->
            </tbody>
        </table>
    </div>

    <div class="container mt-5">
        <h2>Programs</h2>
        <table id="programTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Coach</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>Cost</th>
                    <th>Difficulty</th>
                    <th>Schedule</th>
                    <th>Action</th> <!-- New column for actions -->
                </tr>
            </thead>
            <tbody>
                <!-- DataTables will populate data here -->
            </tbody>
        </table>
    </div>

    <div class="container mt-5">
        <h2>Membership</h2>
        <table id="membershipTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>Allow Visitors</th>
                    <th>Cost</th>
                    <th>Perks</th>
                    <th>Action</th> <!-- New column for actions -->
                </tr>
            </thead>
            <tbody>
                <!-- DataTables will populate data here -->
            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JavaScript -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable for Coaches
            var coachTable = $('#coachTable').DataTable({
                ajax: {
                    url: '/api/coach',
                    dataType: 'json',
                    dataSrc: ''
                },
                columns: [
                    { data: 'id' },
                    { data: 'fname' },
                    { data: 'lname' },
                    { data: 'addressline' },
                    { data: 'phone' },
                    { data: 'zipcode' },
                    { data: 'age' },
                    { data: 'gender' },
                    {
                        // Column for actions (edit and delete buttons)
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-sm btn-primary edit-btn" data-id="' + row.id + '">Edit</button>' +
                                   '<button class="btn btn-sm btn-danger delete-btn" data-id="' + row.id + '">Delete</button>';
                        }
                    }
                ],
                columnDefs: [
                    {
                        targets: [6, 7, 8], // Disable sorting on last three columns (age, gender, actions)
                        orderable: false
                    }
                ]
            });

            // Initialize DataTable for Programs
            var programTable = $('#programTable').DataTable({
                ajax: {
                    url: '/api/program',
                    dataType: 'json',
                    dataSrc: ''
                },
                columns: [
                    { data: 'id' },
                    { data: 'coach' },
                    { data: 'title' },
                    { data: 'description' },
                    { data: 'duration' },
                    { data: 'cost' },
                    { data: 'difficulty' },
                    { data: 'schedule' },
                    {
                        // Column for actions (edit and delete buttons)
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-sm btn-primary edit-btn" data-id="' + row.id + '">Edit</button>' +
                                   '<button class="btn btn-sm btn-danger delete-btn" data-id="' + row.id + '">Delete</button>';
                        }
                    }
                ],
                columnDefs: [
                    {
                        targets: [6, 7, 8], // Disable sorting on last three columns (difficulty, schedule, actions)
                        orderable: false
                    }
                ]
            });

            // Initialize DataTable for Membership
            var membershipTable = $('#membershipTable').DataTable({
                ajax: {
                    url: '/api/membership',
                    dataType: 'json',
                    dataSrc: ''
                },
                columns: [
                    { data: 'id' },
                    { data: 'title' },
                    { data: 'description' },
                    { data: 'duration' },
                    { data: 'allow_visitors' },
                    { data: 'cost' },
                    { data: 'perks' },
                    {
                        // Column for actions (edit and delete buttons)
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-sm btn-primary edit-btn" data-id="' + row.id + '">Edit</button>' +
                                   '<button class="btn btn-sm btn-danger delete-btn" data-id="' + row.id + '">Delete</button>';
                        }
                    }
                ],
                columnDefs: [
                    {
                        targets: [6, 7], // Disable sorting on last two columns (perks, actions)
                        orderable: false
                    }
                ]
            });

            // Handle edit button click (delegate for dynamically added buttons)
            $('#coachTable, #programTable, #membershipTable').on('click', '.edit-btn', function() {
                var tableId = $(this).closest('table').attr('id');
                var dataTable = $('#' + tableId).DataTable();
                var data = dataTable.row($(this).parents('tr')).data();
                // Example: Open a modal with data for editing
                console.log('Edit button clicked for ID: ' + data.id);
                // Add your logic here to open modal or handle edit action
            });

            // Handle delete button click (delegate for dynamically added buttons)
            $('#coachTable, #programTable, #membershipTable').on('click', '.delete-btn', function() {
                var tableId = $(this).closest('table').attr('id');
                var dataTable = $('#' + tableId).DataTable();
                var data = dataTable.row($(this).parents('tr')).data();
                // Example: Send AJAX request to delete data
                $.ajax({
                    url: '/api/delete/' + data.id,
                    type: 'DELETE',
                    success: function(response) {
                        console.log('Deleted ID: ' + data.id);
                        // Reload DataTable after successful deletion
                        dataTable.ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error deleting ID: ' + data.id);
                    }
                });
            });
        });
    </script>
</body>
</html>
