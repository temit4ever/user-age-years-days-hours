 <div class="container">
        <div class="row justify-content-center">
            <div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">lastname</th>
                        <th scope="col">Date of birth</th>
                        <th scope="col">Age</th>
                        <th scope="col">Age in years, days, and hours</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->firstname}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->dob}}</td>
                            <td>{{$user->age}}</td>
                            <td>{{$user->age_in_ydh}}</td>
                            @empty
                                <td>No users</td>
                            @endforelse
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal  to create user-->
    <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createUserModalLabel">Create New User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('user.create-user-form')
                </div>

            </div>
        </div>
    </div>
