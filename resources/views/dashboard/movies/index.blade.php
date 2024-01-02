@extends('dashboard.layouts.main')

@section('container')
    <div class="p-4 sm:ml-64">
        <div class="relative overflow-x-auto">
            <a href="/dashboard/movies/create"
                        class="bg-blue-700 inline-block mb-5 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-300 transform hover:shadow-md">Add
                    </a>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Tittle
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Genre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Release Year
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $movie->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $movie->genre_id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $movie->release_year }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="/dashboard/movies/{{ $movie->id }}" class="">
                                VIEW
                            </a>
                            <a href="/dashboard/movies/{{ $movie->id }}" class="">
                                EDIT
                            </a>
                            <a href="/dashboard/movies/{{ $movie->id }}" class="">
                                DELETE
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
