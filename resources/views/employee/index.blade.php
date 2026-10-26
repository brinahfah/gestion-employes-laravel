@extends('base')

@section('title')

@section('content')
    <h1>Liste des employés</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Mom</th>
            </tr>
        </thead>

        <tbody>
            @forelse($employee as $employe)
                <tr>
                    <td>{{ $employe->id }}</td>
                    <td>{{ $employe->nom }}</td>
                    <td>{{ $employe->prenom }}</td>
                    <td>{{ $employe->email }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">
                        Aucun employé trouvé
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
