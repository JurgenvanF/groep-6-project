@extends ('layout')

@section ('content')

    <form action="/">
        <button type="submit" class='button is-link'>Ga terug</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <td>Functie</td>
            <td>Voornaam</td>
            <td>Achternaam</td>
            <td>Geslacht</td>
            <td>Verwijzer</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @foreach($registrations as $registration)
            <tr>
                <td>{{ $registration->function }}</td>
                <td>{{ $registration->voornaam }}</td>
                <td>{{ $registration->achternaam }}</td>
                <td>{{ $registration->geslacht }}</td>
                <td>{{ $registration->verwijzer }}</td>
                <td>    <form action="/registration/{{$registration->id}}">
                        <button class='button is-link' type="submit">Bekijk</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
