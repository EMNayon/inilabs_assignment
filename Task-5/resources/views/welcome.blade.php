<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>CRUD Operation </title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Todo List</h1>
        <hr>
        <div class="row">
            <div class="col-10">
                <h4>Manage Todo</h4>
                <table class="table table-bordered">
                    <tr>
                        <th>Sl</th>
                        <th>Image </th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Company Name</th>
                        <th>Actions</th>
                    </tr>
                    <tbody id="tbody">

                    </tbody>
                </table>
            </div>

            <div class="col-2">
                <button id="showFormButton" class="btn btn-sm btn-block btn-success" data-toggle="modal"
                    data-target="#addNew">
                    Add New
                </button>
            </div>

        </div>
    </div>
    <!-- Modal for Add new Student-->
    <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addNewDataForm">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                            <span id="error" class="text-danger"></span> <br>
                            <input type="text" class="form-control" id="subject" placeholder="Company Name">
                            <span id="error" class="text-danger"></span> <br>
                            <input type="text" class="form-control" id="department" placeholder="Department">
                            <span id="error" class="text-danger"></span>
                            <input type="file" class="form-control" id="image" placeholder="Image">
                            <span id="error" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-sm btn-block btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for update student-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editDataForm">
                        <div class="form-group">
                            <input type="text" class="form-control" id="e_name" placeholder="Name">
                            <input type="hidden" id="e_id">
                            <span id="error" class="text-danger"></span> <br>

                            <input type="text" class="form-control" id="e_company" placeholder="Company Name">
                            <input type="hidden" id="e_id">
                            <span id="error" class="text-danger"></span> <br>
                            <input type="text" class="form-control" id="e_department" placeholder="Department">
                            <input type="hidden" id="e_id">
                            <span id="error" class="text-danger"></span>
                            <input type="text" class="form-control" id="e_image" placeholder="Image">
                            <input type="hidden" id="e_id">
                            <span id="error" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-sm btn-block btn-success" type="submit">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal for show student-->
    <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Show  Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editDataForm">
                        <div class="form-group">
                            <input type="text" class="form-control" id="s_name" placeholder="Name">
                            <input type="hidden" id="s_id">
                            <span id="error" class="text-danger"></span> <br>
                            <input type="text" class="form-control" id="s_company" placeholder="Company Name">
                            <input type="hidden" id="s_id">
                            <span id="error" class="text-danger"></span> <br>
                            <input type="text" class="form-control" id="s_department" placeholder="Department">
                            <input type="hidden" id="s_id">
                            <span id="error" class="text-danger"></span>
                            <input type="text" class="form-control" id="s_image" placeholder="Image">
                            <input type="hidden" id="s_id">
                            <span id="error" class="text-danger"></span>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <script>
        let url = window.location.origin

        function table_data_row(data) {
            var rows = '';
            var i = 0;
            $.each(data, function(key, value) {
                rows = rows + '<tr>';
                rows = rows + '<td>' + ++i + '</td>';
                rows = rows + '<td>' + value.name + '</td>';
                rows = rows + '<td>' + value.company_name + '</td>';
                rows = rows + '<td>' + value.department + '</td>';
                rows = rows + '<td>' + value.image + '</td>';
                rows = rows + '<td data-id="' + value.id + '" class="text-center">';
                rows = rows + '<a class="btn btn-sm btn-info text-light" id="editRow" data-id="' + value.id +
                    '" data-toggle="modal" data-target="#editModal">Edit</a> ';
                rows = rows + '<a class="btn btn-sm btn-danger text-light"  id="deleteRow" data-id="' + value.id +
                    '" >Delete</a> ';
                rows = rows + '<a class="btn btn-sm btn-success text-light"  id="viewRow" data-id="' + value.id +
                    '"  data-toggle="modal" data-target="#showModal">View</a> ';
                rows = rows + '</td>';
                rows = rows + '</tr>';
            });
            $("#tbody").html(rows);
        }

        function getAllData() {
            axios.get("{{ route('/get_all_data') }}")
                .then(function(res) {
                    table_data_row(res.data)
                    console.log(res.data);
                })
        }
        getAllData();


        //store data
        $('body').on('submit', '#addNewDataForm', function(e) {
            e.preventDefault();
            axios.post("{{ route('todo.store') }}", {
                    name: $('#name').val(),
                    company_name: $('#company_name').val(),
                    department: $('#department').val(),
                    image: $('#image').val(),
                })
                .then(function(response) {
                    getAllData();
                    // console.log(response);
                    $('#name').val('');
                    $('#company_name').val('');
                    $('#department').val('');
                    $('#image').val('');
                    $('#error').text('')
                    Swal.fire({
                        icon: 'success',
                        title: 'Success...',
                        text: 'Data save Successfully!',
                    })
                })
                .catch(function(error) {
                    if (error.response.data.errors.name) {
                        $('#error').text(error.response.data.errors.name[0]);
                    }
                });
        });

        //delete currency
        $('body').on('click', '#deleteRow', function(e) {
            e.preventDefault();
            let id = $(this).data('id')
            // let del = url + '/category/' + id
            // console.log(del)
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success mx-2',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete(`${url}/todo/${id}`).then(function(r) {
                        getAllData();
                        swalWithBootstrapButtons.fire(
                            'Deleted!',
                            'Your data has been deleted.',
                            'success'
                        )
                    });
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your file is safe :)',
                        'error'
                    )
                }
            })
        });
        //edit
        $('body').on('click', '#editRow', function() {
            let id = $(this).data('id');
            let edit = url + '/todo' + '/' + id + '/edit'
            //    console.log(url);
            axios.get(edit)
                .then(function(res) {
                    //    console.log(res);
                    $('#e_name').val(res.data.name)
                    $('#e_company').val(res.data.company_name)
                    $('#e_department').val(res.data.department)
                    $('#e_image').val(res.data.image)
                    $('#e_id').val(res.data.id)
                })
        })
        //update
        $('body').on('submit', '#editDataForm', function(e) {
            e.preventDefault()
            let id = $('#e_id').val()
            let data = {
                id: id,
                name: $('#e_name').val(),
                company_name: $('#e_company').val(),
                department: $('#e_department').val(),
                image: $('#e_image').val(),
            }
            // console.log(data);
            let path = url + '/todo' +  '/' + id
            axios.put(path, data)
                .then(function(res) {
                    getAllData();
                    $('#editModal').modal('toggle')
                    Swal.fire({
                        icon: 'success',
                        title: 'Success...',
                        text: 'Data Update Successfully!',
                    })
                    console.log(res);
                })
        })
        // show
        $('body').on('click', '#viewRow', function() {
            let id = $(this).data('id');
            // console.log(id);
            let view = url + '/todo' +  '/' + id; // Adjust the URL as needed
            axios.get(view)
                .then(function(res) {
                    console.log(res);
                    // Fill in the modal with data from the response
                    $('#s_name').val(res.data.name);
                    $('#s_company').val(res.data.company_name);
                    $('#s_department').val(res.data.department);
                    $('#s_image').val(res.data.image);
                    $('#s_id').val(res.data.id)

                    // Show the modal
                    // $('#viewCategoryModal').modal('show');
                })
        });
    </script>
</body>

</html>
