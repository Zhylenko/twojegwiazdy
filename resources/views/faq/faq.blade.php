@section('faq')
        <div class="faq-area">
            <div class="title-block">
                <div class="second-title">
                    <h3>Często Zadawane Pytania.</h3>
                </div>
            </div>
            <div class="faq-block">
                @foreach($faqs as $faq)
                <div class="question-block">
                    <div class="question">
                        <h4>{!! $faq->title !!}</h4>
                    </div>
                    <div class="description-block">
                        <p>{!! $faq->text !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection