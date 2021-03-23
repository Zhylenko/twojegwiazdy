@section('progress')
        <div class="progress-area">
            <div class="progress-block">
                <div class="step {{ ($progress >= 1) ? 'active' : '' }}">
                    <div class="image-block w">
                        <img src="{{ asset('img/project.svg') }}" alt="new project">
                    </div>
                    <div class="title-block">
                        <div class="title">
                            <h5>WYBÓR DESIGNU</h5>
                        </div>
                    </div>
                </div>
                <div class="line-block {{ ($progress >= 2) ? 'active' : '' }}">
                    <div class="line"></div>
                </div>
                <div class="step {{ ($progress >= 2) ? 'active' : '' }}">
                    <div class="image-block">
                        <img src="{{ asset('img/card.svg') }}" alt="card">
                    </div>
                    <div class="title-block">
                        <div class="title">
                            <h5>PŁATNOŚĆ</h5>
                        </div>
                    </div>
                </div>
                <div class="line-block {{ ($progress >= 3) ? 'active' : '' }}">
                    <div class="line"></div>
                </div>
                <div class="step {{ ($progress >= 3) ? 'active' : '' }}">
                    <div class="image-block w">
                        <img src="{{ asset('img/success.svg') }}" alt="success icon">
                    </div>
                    <div class="title-block">
                        <div class="title">
                            <h5>SUKCES</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection