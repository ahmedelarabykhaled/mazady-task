<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height: 100%">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50" style="width: 100%; height: 100%">
    <section class="w-100 mt-4"
        style="width: 100%;display: flex;justify-content: center;align-items: center;">
        <div class="w-75 card p-5" style="box-shadow: 5px 5px 50px lightblue">
            <h1 class="text-center">MAZADY EMPLOYEES TASK</h1>
            <h5 class="my-3 text-center">Get top employees salaries </h5>
            <form method="get" action="{{ route('employees.filtered') }}" class="my-4">
                <div class="w-50 mx-auto">
                    <label for="formGroupExampleInput" class="form-label">Number of emplyees :</label>
                    <input type="number" id="counter" min="5" max="50"
                        value="{{ $min_employees_salary ?? 5 }}" name="min_employees_salary" class="form-control"
                        id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="text-center">
                    <button type="submit" onclick="load_data()"
                        class="btn btn-primary my-3 px-4  py-2">display</button>
                </div>
            </form>
            @isset($employees)
                <hr>
                <p>result count : {{ $employees->count() }}</p>
                <div class="">
                    <table class="table table-bordered table-striped datatable">
                        <thead class="table-primary">
                            <th>first name</th>
                            <th>last name</th>
                            <th>email</th>
                            <th>salary</th>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->max_salary }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endisset
    </section>
</body>

</html>
