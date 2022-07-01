
<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('blogs') }}
        </h2> --}}

    </x-slot>

    <div class="py-12 p-6">
        <h1 class="mb-3">USERS</h1>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">name</th>
                  <th scope="col">email</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
                @endforeach



              </tbody>
          </table>

    </div>
</x-app-layout>
