@section('order')
        <div class="order-area">
            <div class="form-area">
                <div class="form-block">
                    <div class="title-block">
                        <div class="third-title">
                            <h4>Dane do dostawy</h4>
                        </div>
                    </div>
                    <form>
                        <div>
                            <div class="input">
                                <input id="name" type="text" required autocomplete="off">
                                <label for="name">Imię i nazwisko</label>
                                <span class="bar"></span>
                            </div>
                            <div class="input">
                                <input id="email" type="text" required autocomplete="off">
                                <label for="email">Email</label>
                                <span class="bar"></span>
                            </div>
                            <div class="input">
                                <input id="phone" type="text" required autocomplete="off">
                                <label for="phone">Telefon kontaktowy</label>
                                <span class="bar"></span>
                            </div>
                            <div class="input">
                                <input id="city" type="text" required autocomplete="off">
                                <label for="city">Miasto</label>
                                <span class="bar"></span>
                            </div>
                        </div>
                        <div>
                            <div class="input">
                                <input id="delivery" type="text" required autocomplete="off">
                                <label for="delivery">Wybierz sposób dostawy</label>
                                <span class="bar"></span>
                            </div>
                            <div class="input">
                                <input id="street" type="text" required autocomplete="off">
                                <label for="street">Adres - Ulica</label>
                                <span class="bar"></span>
                            </div>
                            <div class="input">
                                <input id="zip" type="text" required autocomplete="off">
                                <label for="zip">Kod pocztowy</label>
                                <span class="bar"></span>
                            </div>
                            <div class="input">
                                <input id="address" type="text" required autocomplete="off">
                                <label for="address">Adres Paczkomatu</label>
                                <span class="bar"></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="regulation-block">
                    <div class="regulation">
                        <input type="checkbox" name="regulation">
                        <a href="{{ asset('pdf/Regulamin sklepu.pdf') }}">Akceptuję regulamin</a>
                    </div>
                    <div class="blue-button">
                        <a href="#">Zapłać</a>
                    </div>
                </div>
            </div>
            <div class="product-area">
                <div class="product">
                    <div class="image-block">
                        <img src="{{ asset('img/work1.png') }}" alt="product">
                    </div>
                    <div class="description-block">
                        <div class="characteristic">
                            <p>Rozmiar: <span>40x50 cm</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection