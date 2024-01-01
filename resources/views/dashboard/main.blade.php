@extends('dashboard.index')

@section('main')
    <div style="margin-left: 300px">
        <div class="mx-8 my-4">
            <input type="text" id="searchInput" class="p-2 border border-gray-300 rounded" placeholder="Search...">
        </div>

        <div class="mx-8 my-4">
            <table id="data-table" class="w-full border border-collapse border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 text-left">Image</th>
                        <th class="py-2 px-4 text-left">Title</th>
                        <th class="py-2 px-4 text-left">Description</th>
                        <th class="py-2 px-4 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    <!-- Table content will be dynamically filled through AJAX -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


    <script>
        var table;
        $(document).ready(function() {
            table = $('#data-table').DataTable({
                var table = $('#data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: '/get-data',
                        data: function(d) {
                            d.search = $('#searchInput').val();
                        }
                    },
                    columns: [{
                            data: 'image',
                            render: function(data, type, row) {
                                return '<img src="' + data +
                                    '" alt="Image" class="max-w-20 max-h-20">';
                            }
                        },
                        {
                            data: 'title',
                            class: 'py-2 px-4 text-left'
                        },
                        {
                            data: 'description',
                            class: 'py-2 px-4 text-left'
                        },
                        {
                            data: null,
                            searchable: false,
                            render: function(data, type, row) {
                                return '<button class="bg-blue-500 text-white py-2 px-4 rounded-full" onclick="editData(' +
                                    row.id + ')">Edit</button>';
                            }
                        }
                    ],
                    language: {
                        emptyTable: 'No data available in the table'
                    },
                    lengthMenu: [
                        [10, 25, 50, -1],
                        [10, 25, 50, 'All']
                    ], // Set your desired page length options
                    pageLength: 10 // Set the default page length
                });
            });
        });

        $('#searchInput').on('keyup', function() {
            table.search(this.value).draw();
        });

        function editData(id) {
            // Function to edit data as needed
            console.log('Edit data with ID: ' + id);
        }
    </script>
@endsection
