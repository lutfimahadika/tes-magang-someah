<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Project tes magang</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<main style="margin-top: 70px">
    <div class="container">
        <div class="row">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <nav class="navbar bg-body-tertiary">
                <div class="container">
                    <a class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#ModalLogout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="position-absolute top-0 end-0 bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>
                    </a>
                </div>
            <br><br>
            </nav>
            <figure class="text-center">
                <p class="h1">Tasks List<p>
            </figure>
            
            <div class="d-grid gap-2 md-flex justify-content-md-end">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalCreate">Create New Task</a>
            </div>
            <div class="table-responsive-lg">
                <table class="table text-center">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tasks Name</th>
                        <th>Attachment</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($result as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->tasks_name }}</td>
                        <td>{{ $item->attachment}}</td>
                        <td>{{ $item->status}}</td>
                        <td>
                            <a class="btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#ModalApprovement">approvement</a>
                            <a class="btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#ModalShow">Show</a>
                            <a class="btn-sm" href="#">Edit</a>
                            <form action="{{ route('tasks.destroy', $item->id) }}" method="POST" class="d-inline formDelete">
                                @csrf 
                                @method('DELETE')
                                <button class="btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('modal.approvement')
    @include('modal.create')
    @include('modal.show')
    @include('modal.profile')
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(() => {
        $("body").on("click", ".formDelete", (el) => {
            el.preventDefault();
            Swal.fire({
                title: 'Perhatian',
                text: "Apakah anda yakin ingin menghapus data ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if(result.isConfirmed) $(el.currentTarget).submit();
            })
        })
    })
</script>
</body>
</html>