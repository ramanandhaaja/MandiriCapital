@extends('layout.mainlayout')
@use('Illuminate\Support\Facades\Storage')


@section('localcss')
    <link href="{{ asset('css/report-show.css') }}" rel="stylesheet">
@endsection


@section('container')
    <!-- Content Section -->
    <div class="content-section">
        <div class="content-container">
            <!-- Left Sidebar -->
            <div class="sidebar-left">
                <div class="article-meta">
                    <div class="meta-info">
                        <span style="visibility: hidden;"
                            class="article-date">{{ \Carbon\Carbon::parse($publication->published_date)->format('j F Y') }}</span>
                        <div class="author-info">
                            <img src="{{ asset('images/media/author.png') }}" alt="Author" class="author-avatar"
                                loading="lazy">
                            <div class="author-details">
                                <span class="author-name">Mandiri Capital Indonesia - </span>
                                <span class="author-role">Author</span>
                            </div>
                        </div>
                        <img src="{{ $publication->image_path ? Storage::url($publication->image_path) : asset('images/media/image5.png') }}"
                            alt="Author" class="image-left" loading="lazy" />
                        @if (!$publication->hide_title)
                            <div class="article-title">{{ $publication->title ?? '' }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="content-text">
                <div class="article-content">
                    <div class="company-details">
                        <p class="company-description">
                            {{ $publication->content }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="share-section">
            <div class="share-content">
            </div>
        </div>
    </div>

    <!-- Download Section -->
    <div class="download-section">
        <div class="download-container">
            <!-- Left Column -->
            <div class="download-left">
                <h2 class="download-title">{!! $publication_email->getTranslation('title', session('locale', 'en')) !!}</h2>
                <img src="{{ asset('images/report/download.png') }}" alt="Download" class="download-image" loading="lazy">
            </div>

            <!-- Right Column -->
            <div class="download-right">
                <form action="{{ route('report.download', $publication) }}" method="POST" class="download-form">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">{!! $publication_email->getTranslation('name', session('locale', 'en')) !!}</label>
                            <input type="text" id="name" name="name" placeholder="Write here..." required>
                        </div>

                        <div class="form-group">
                            <label for="email">{!! $publication_email->getTranslation('email', session('locale', 'en')) !!}</label>
                            <input type="email" id="email" name="email" placeholder="Write here..." required>
                        </div>


                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="company_name">{!! $publication_email->getTranslation('company', session('locale', 'en')) !!}</label>
                            <input type="text" id="company_name" name="company_name" placeholder="Write here..."
                                required>
                        </div>

                        <div class="form-group">
                            <label for="position">{!! $publication_email->getTranslation('job', session('locale', 'en')) !!}</label>
                            <input type="text" id="position" name="position" placeholder="Write here..." required>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="reset" class="btn-cancel">{!! $publication_email->getTranslation('cancel', session('locale', 'en')) !!}</button>
                        <button type="submit" class="btn-download"
                            onclick="alert('Thank you for your interest, we will contact you very soon!')"
                            data-category="{{ $publication->category->name }}">{!! $publication_email->getTranslation('submit', session('locale', 'en')) !!}</button>
                    </div>


                </form>
            </div>
        </div>
    </div>

    @if (session('error'))
        <script>
            alert('{{ session('error') }}');
        </script>
    @endif
@endsection
