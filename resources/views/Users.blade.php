@extends('layouts.app')
@section('main')
    <div class="container w-full px-2 mx-auto md:w-4/5 xl:w-3/5">


        <!--Regular Datatables CSS-->
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <!--Responsive Extension Datatables CSS-->
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

        <style>
            /*Overrides for Tailwind CSS */

            /*Form fields*/
            .dataTables_wrapper select,
            .dataTables_wrapper .dataTables_filter input {
                color: #4a5568;
                /*text-gray-700*/
                padding-left: 1rem;
                /*pl-4*/
                padding-right: 1rem;
                /*pl-4*/
                padding-top: .5rem;
                /*pl-2*/
                padding-bottom: .5rem;
                /*pl-2*/
                line-height: 1.25;
                /*leading-tight*/
                border-width: 2px;
                /*border-2*/
                border-radius: .25rem;
                border-color: #edf2f7;
                /*border-gray-200*/
                background-color: #edf2f7;
                /*bg-gray-200*/
            }

            /*Row Hover*/
            table.dataTable.hover tbody tr:hover,
            table.dataTable.display tbody tr:hover {
                background-color: #ebf4ff;
                /*bg-indigo-100*/
            }

            /*Pagination Buttons*/
            .dataTables_wrapper .dataTables_paginate .paginate_button {
                font-weight: 700;
                /*font-bold*/
                border-radius: .25rem;
                /*rounded*/
                border: 1px solid transparent;
                /*border border-transparent*/
            }

            /*Pagination Buttons - Current selected */
            .dataTables_wrapper .dataTables_paginate .paginate_button.current {
                color: #fff !important;
                /*text-white*/
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
                /*shadow*/
                font-weight: 700;
                /*font-bold*/
                border-radius: .25rem;
                /*rounded*/
                background: #667eea !important;
                /*bg-indigo-500*/
                border: 1px solid transparent;
                /*border border-transparent*/
            }

            /*Pagination Buttons - Hover */
            .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
                color: #fff !important;
                /*text-white*/
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
                /*shadow*/
                font-weight: 700;
                /*font-bold*/
                border-radius: .25rem;
                /*rounded*/
                background: #667eea !important;
                /*bg-indigo-500*/
                border: 1px solid transparent;
                /*border border-transparent*/
            }

            /*Add padding to bottom border */
            table.dataTable.no-footer {
                border-bottom: 1px solid #e2e8f0;
                /*border-b-1 border-gray-300*/
                margin-top: 0.75em;
                margin-bottom: 0.75em;
            }

            /*Change colour of responsive icon*/
            table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
            table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
                background-color: #667eea !important;
                /*bg-indigo-500*/
            }

        </style>
        <!--Title-->
        <h1 class="flex items-center px-2 py-8 font-sans text-xl font-bold text-indigo-500 break-normal md:text-2xl">
            Users
        </h1>


        <!--Card-->
        <div id='recipients' class="w-auto p-8 mt-6 bg-white rounded shadow lg:mt-0">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="text-red-500">{{ $error }}</div>
            @endforeach
        @endif

            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        
                        <th data-priority="1">Nom</th>
                        <th data-priority="2">Prenom</th>
                        <th data-priority="3">email</th>
                        <th>Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                            
                            <td class="text-center">{{ $user->name }}</td>
                            <td class="text-center">{{ $user->prenom }}</td>
                            <td class="text-center">{{ $user->email }}</td>
                            <td class="text-center">
                                <a href="/user/{{$user->id}}"><i class="fa-regular fa-eye"></i></a>
                        
                                
                                    @include('components.edit')
                            <a href=""><i class=" fa-solid fa-recycle"></i></a></td>
                        </tr>
                        @endforeach

                    <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->


                </tbody>

            </table>


        </div>
        <!--/Card-->


    </div>
    <!--/container-->





    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

    </div>
@endsection
