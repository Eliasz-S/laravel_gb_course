@extends('layouts.main')
@section('content')
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @forelse ($newsList as $news)
                <!-- Post preview-->
                    <div class="post-preview">
                        <a href="{{ route('news.show', ['id' => $loop->iteration]) }}">
                            <h2 class="post-title">{{ $news['title'] }}</h2>
                            <h3 class="post-subtitle">{!! $news['description'] !!}</h3>
                        </a>
                        <h4 class="post-preview" style="font-style: italic">
                            <a href="{{ route('categories.filter', ['id' => $news['category_id']]) }}">
                                {{ $categoriesList[$news['category_id']] }}
                            </a>
                        </h4>
                        <p class="post-meta">
                            Опубликовал
                            <a href="#!">Админ</a>
                            от {{ now()->format('d-m-Y H:i') }}
                        </p>
                    </div>
                <!-- Divider-->
                <hr class="my-4" />
                @empty
                    <h2>Новости отсутствуют</h2>
                @endforelse
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>
        </div>
    </div>
@endsection


