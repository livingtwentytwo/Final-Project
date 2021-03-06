@extends('layouts.app')

@section('content')


	<div class="container-fluid">
		<div class="col-md-6">
            <div class="container">
                <h5>Patient's Information</h5>
                <label>Name: </label>
                <strong>{{ $pat->last_name }}, {{ $pat->first_name }} {{ $pat->middle_name }}</strong>
                <label>Age:</label>
                <strong>{{ $pat->age }}</strong>
                <label>Sex:</label>
                <strong>{{ $pat->sex }}</strong><br>
                {{-- <label>Attending Physician:</label>
                <strong>         </strong> --}}
                <label>Room:</label>
                <strong>{{ $admissions->room }}</strong><br>
            </div>

            <div class="dropdown">
                <button onclick="myFunction()" class="dropdown-toggle">View Charts</button>
                <div id="myDropdown" class="dropdown-menu">
                    <a href="{{ route('show.orders', $pat->id)}}">
                        Doctor's Order</a><br>
                    <a href="{{ route('input.nursesnotes', $pat->id)}}">
                        Nurses' Notes</a><br>
                    <a href="{{ route('input.rbs', $pat->id)}}">
                        RBS Monitoring</a><br>
                    <a href="{{ route('input.intakeoutput', $pat->id)}}">
                        Intake and Output Records</a><br>
                    <a href="{{ route('input.ivf', $pat->id)}}">
                        Intravenous Fluids Record</a><br>
                    <a href="{{ route('input.vitalsigns', $pat->id)}}">
                        Vital Signs Monitoring</a>
                </div>
            </div>
        </div>
        <br><br>

            @yield('chart_content')

            <div style="float: right; position: right;">
                <a href="javascript:history.back()" class="btn btn-danger" >Back</a>
            </div>
        </div>

    @push('scripts')
    <script type="text/javascript">
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
    // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
    @endpush
@endsection