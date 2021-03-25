@section('contact')
        <table align="center" cols="1" cellspacing="10">
            <tr>
                <th>
                    <div class="title">
                        <h2>Kontakt</h2>
                    </div>
                </th>
            </tr>
            <tr>
                <td>
                    <div class="info-block">
                        <div class="title">
                            <h4>Imię i nazwisko</h4>
                        </div>
                        <div class="description">
                            <p>{{ $name }}</p>
                        </div>
                    </div>
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="info-block">
                        <div class="title">
                            <h4>Email</h4>
                        </div>
                        <div class="description">
                            <p>{{ $email }}</p>
                        </div>
                    </div>
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="info-block">
                    <div class="title">
                        <h4>Treść wiadomości</h4>
                    </div>
                    <div class="description">
                        <p>{{ $text }}</p>
                    </div>
                </div>
                </td>
            </tr>
        </table>
@endsection