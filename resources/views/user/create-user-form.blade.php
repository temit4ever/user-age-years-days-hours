<div id="views">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="firstname" class="form-label">Firstname</label>
            <input type="text" name="firstname" class="form-control" id="firstname"
                   placeholder="Firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname</label>
            <input type="text" name="lastname" class="form-control" id="lastname"
                   placeholder="Lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="text" name="dob" class="form-control" id="dob-date-picker"
                   placeholder="Date of Birth">
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Create User"/>
            <button type="button" class="btn btn-secondary float-end" data-bs-dismiss="modal">Close</button>
        </div>
    </form>
</div>
<script>
    flatpickr('#dob-date-picker',
        {
            enableTime: true
        }
    )
</script>

