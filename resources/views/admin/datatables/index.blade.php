<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tables with Modals</title>
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
                    <th>Action</th>
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
                    <th>Action</th>
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- DataTables will populate data here -->
            </tbody>
        </table>
    </div>

    <!-- Coach Edit Modal -->
    <div class="modal fade" id="editCoachModal" tabindex="-1" role="dialog" aria-labelledby="editCoachModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCoachModalLabel">Edit Coach</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editCoachForm">
                        <input type="hidden" id="editCoachID">
                        <div class="form-group">
                            <label for="editCoachFirstName">First Name</label>
                            <input type="text" class="form-control" id="editCoachFirstName">
                        </div>
                        <div class="form-group">
                            <label for="editCoachLastName">Last Name</label>
                            <input type="text" class="form-control" id="editCoachLastName">
                        </div>
                        <div class="form-group">
                            <label for="editCoachAddress">Address</label>
                            <input type="text" class="form-control" id="editCoachAddress">
                        </div>
                        <div class="form-group">
                            <label for="editCoachPhone">Phone</label>
                            <input type="text" class="form-control" id="editCoachPhone">
                        </div>
                        <div class="form-group">
                            <label for="editCoachZIP">ZIP</label>
                            <input type="text" class="form-control" id="editCoachZIP">
                        </div>
                        <div class="form-group">
                            <label for="editCoachAge">Age</label>
                            <input type="number" class="form-control" id="editCoachAge">
                        </div>
                        <div class="form-group">
                            <label for="editCoachGender">Gender</label>
                            <input type="text" class="form-control" id="editCoachGender">
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Program Edit Modal -->
    <div class="modal fade" id="editProgramModal" tabindex="-1" role="dialog" aria-labelledby="editProgramModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProgramModalLabel">Edit Program</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editProgramForm">
                        <input type="hidden" id="editProgramID">
                        <div class="form-group">
                            <label for="editProgramCoach">Coach</label>
                            <input type="text" class="form-control" id="editProgramCoach">
                        </div>
                        <div class="form-group">
                            <label for="editProgramTitle">Title</label>
                            <input type="text" class="form-control" id="editProgramTitle">
                        </div>
                        <div class="form-group">
                            <label for="editProgramDescription">Description</label>
                            <textarea class="form-control" id="editProgramDescription"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="editProgramDuration">Duration</label>
                            <input type="text" class="form-control" id="editProgramDuration">
                        </div>
                        <div class="form-group">
                            <label for="editProgramCost">Cost</label>
                            <input type="text" class="form-control" id="editProgramCost">
                        </div>
                        <div class="form-group">
                            <label for="editProgramDifficulty">Difficulty</label>
                            <input type="text" class="form-control" id="editProgramDifficulty">
                        </div>
                        <div class="form-group">
                            <label for="editProgramSchedule">Schedule</label>
                            <input type="text" class="form-control" id="editProgramSchedule">
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Membership Edit Modal -->
    <div class="modal fade" id="editMembershipModal" tabindex="-1" role="dialog" aria-labelledby="editMembershipModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMembershipModalLabel">Edit Membership</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editMembershipForm">
                        <input type="hidden" id="editMembershipID">
                        <div class="form-group">
                            <label for="editMembershipTitle">Title</label>
                            <input type="text" class="form-control" id="editMembershipTitle">
                        </div>
                        <div class="form-group">
                            <label for="editMembershipDescription">Description</label>
                            <textarea class="form-control" id="editMembershipDescription"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="editMembershipDuration">Duration</label>
                            <input type="text" class="form-control" id="editMembershipDuration">
                        </div>
                        <div class="form-group">
                            <label for="editMembershipAllowVisitors">Allow Visitors</label>
                            <input type="text" class="form-control" id="editMembershipAllowVisitors">
                        </div>
                        <div class="form-group">
                            <label for="editMembershipCost">Cost</label>
                            <input type="text" class="form-control" id="editMembershipCost">
                        </div>
                        <div class="form-group">
                            <label for="editMembershipPerks">Perks</label>
                            <textarea class="form-control" id="editMembershipPerks"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
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
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-sm btn-primary edit-btn" data-id="' + row.id + '" data-type="coach">Edit</button>' +
                                   '<button class="btn btn-sm btn-danger delete-btn" data-id="' + row.id + '" data-type="coach">Delete</button>';
                        }
                    }
                ],
                columnDefs: [
                    {
                        targets: [6, 7, 8],
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
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-sm btn-primary edit-btn" data-id="' + row.id + '" data-type="program">Edit</button>' +
                                   '<button class="btn btn-sm btn-danger delete-btn" data-id="' + row.id + '" data-type="program">Delete</button>';
                        }
                    }
                ],
                columnDefs: [
                    {
                        targets: [6, 7, 8],
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
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-sm btn-primary edit-btn" data-id="' + row.id + '" data-type="membership">Edit</button>' +
                                   '<button class="btn btn-sm btn-danger delete-btn" data-id="' + row.id + '" data-type="membership">Delete</button>';
                        }
                    }
                ],
                columnDefs: [
                    {
                        targets: [6, 7],
                        orderable: false
                    }
                ]
            });

            // Handle edit button click
            $('body').on('click', '.edit-btn', function() {
                var type = $(this).data('type');
                var id = $(this).data('id');
                var dataTable;

                switch (type) {
                    case 'coach':
                        dataTable = coachTable;
                        break;
                    case 'program':
                        dataTable = programTable;
                        break;
                    case 'membership':
                        dataTable = membershipTable;
                        break;
                }

                var data = dataTable.row($(this).parents('tr')).data();
                fillEditModal(type, data);
                $('#edit' + capitalizeFirstLetter(type) + 'Modal').modal('show');
            });

            // Handle form submission for editing
            $('#editCoachForm').submit(function(event) {
                event.preventDefault();
                submitEditForm('coach');
            });

            $('#editProgramForm').submit(function(event) {
                event.preventDefault();
                submitEditForm('program');
            });

            $('#editMembershipForm').submit(function(event) {
                event.preventDefault();
                submitEditForm('membership');
            });

            // Handle delete button click
            $('body').on('click', '.delete-btn', function() {
                var type = $(this).data('type');
                var id = $(this).data('id');
                var dataTable;

                switch (type) {
                    case 'coach':
                        dataTable = coachTable;
                        break;
                    case 'program':
                        dataTable = programTable;
                        break;
                    case 'membership':
                        dataTable = membershipTable;
                        break;
                }

                $.ajax({
                    url: '/api/delete/' + type + '/' + id,
                    type: 'DELETE',
                    success: function(response) {
                        console.log('Deleted ID: ' + id);
                        dataTable.ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error deleting ID: ' + id, xhr.status, xhr.responseText);
                    }
                });
            });

            // Fill the edit modal with data
            function fillEditModal(type, data) {
                $('#edit' + capitalizeFirstLetter(type) + 'ID').val(data.id);

                switch (type) {
                    case 'coach':
                        $('#editCoachFirstName').val(data.fname);
                        $('#editCoachLastName').val(data.lname);
                        $('#editCoachAddress').val(data.addressline);
                        $('#editCoachPhone').val(data.phone);
                        $('#editCoachZIP').val(data.zipcode);
                        $('#editCoachAge').val(data.age);
                        $('#editCoachGender').val(data.gender);
                        break;
                    case 'program':
                        $('#editProgramCoach').val(data.coach);
                        $('#editProgramTitle').val(data.title);
                        $('#editProgramDescription').val(data.description);
                        $('#editProgramDuration').val(data.duration);
                        $('#editProgramCost').val(data.cost);
                        $('#editProgramDifficulty').val(data.difficulty);
                        $('#editProgramSchedule').val(data.schedule);
                        break;
                    case 'membership':
                        $('#editMembershipTitle').val(data.title);
                        $('#editMembershipDescription').val(data.description);
                        $('#editMembershipDuration').val(data.duration);
                        $('#editMembershipAllowVisitors').val(data.allow_visitors);
                        $('#editMembershipCost').val(data.cost);
                        $('#editMembershipPerks').val(data.perks);
                        break;
                }
            }

            // Submit the edit form
            function submitEditForm(type) {
                var formData = {};

                switch (type) {
                    case 'coach':
                        formData = {
                            id: $('#editCoachID').val(),
                            fname: $('#editCoachFirstName').val(),
                            lname: $('#editCoachLastName').val(),
                            addressline: $('#editCoachAddress').val(),
                            phone: $('#editCoachPhone').val(),
                            zipcode: $('#editCoachZIP').val(),
                            age: $('#editCoachAge').val(),
                            gender: $('#editCoachGender').val()
                        };
                        break;
                    case 'program':
                        formData = {
                            id: $('#editProgramID').val(),
                            coach: $('#editProgramCoach').val(),
                            title: $('#editProgramTitle').val(),
                            description: $('#editProgramDescription').val(),
                            duration: $('#editProgramDuration').val(),
                            cost: $('#editProgramCost').val(),
                            difficulty: $('#editProgramDifficulty').val(),
                            schedule: $('#editProgramSchedule').val()
                        };
                        break;
                    case 'membership':
                        formData = {
                            id: $('#editMembershipID').val(),
                            title: $('#editMembershipTitle').val(),
                            description: $('#editMembershipDescription').val(),
                            duration: $('#editMembershipDuration').val(),
                            allow_visitors: $('#editMembershipAllowVisitors').val(),
                            cost: $('#editMembershipCost').val(),
                            perks: $('#editMembershipPerks').val()
                        };
                        break;
                }

                $.ajax({
                    url: '/api/update/' + type + '/' + formData.id,
                    type: 'PUT',
                    data: JSON.stringify(formData),
                    contentType: 'application/json',
                    success: function(response) {
                        alert('Record updated successfully');
                        $('#edit' + capitalizeFirstLetter(type) + 'Modal').modal('hide');
                        $('#' + type + 'Table').DataTable().ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating record:', xhr.status, xhr.responseText);
                        alert('Error updating record: ' + xhr.responseText);
                    }
                });
            }

            // Capitalize the first letter of a string
            function capitalizeFirstLetter(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
            }
        });
    </script>
</body>
</html>
