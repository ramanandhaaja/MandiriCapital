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
                        <span
                            class="article-date">{{ \Carbon\Carbon::parse($publication->published_date)->format('F Y') }}</span>
                        <div class="author-info">
                            <img src="{{ asset('images/media/author.png') }}" alt="Author" class="author-avatar">
                            <div class="author-details">
                                <span class="author-name">Mandiri Admin</span>
                                <span class="author-role">Author</span>
                            </div>
                        </div>
                        <img src="{{ $publication->image_path ? Storage::url($publication->image_path) : asset('images/media/image5.png') }}"
                            alt="Author" class="image-left" />
                        <div class="article-title">{{ $publication->title ?? '' }}</div>
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
                <h2 class="download-title">Please fill in contact data to download</h2>
                <img src="{{ asset('images/report/download.png') }}" alt="Download" class="download-image">
            </div>

            <!-- Right Column -->
            <div class="download-right">
                <form action="{{ route('report.download', $publication) }}" method="POST" class="download-form">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Write here..." required>
                        </div>

                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" id="company_name" name="company_name" placeholder="Write here..."
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Write here..." required>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-cancel">Cancel</button>
                        <button type="submit" class="btn-download"
                            data-category="{{ $publication->category->name }}">Download</button>
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
