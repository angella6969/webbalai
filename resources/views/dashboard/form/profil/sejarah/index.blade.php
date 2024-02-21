@extends('layout.dashboard.main')
@section('container')
    <link rel="stylesheet" href="{{ asset('css\myCss.css') }}">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Sejarah</h5>

                <div class="table-responsive-sm">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr style="text-align: center;">
                                <th scope="col">No</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sejarah as $sejara)
                                <tr style="text-align: center;">
                                    <td> Sejarah</td>
                                    <td>
                                        <a href="{{ route('sejarah.edit', ['sejarah' => $sejara->id]) }}"
                                            class="bg badge bg-warning"><span data-feather="edit">
                                            </span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <x-notif />
@endsection
