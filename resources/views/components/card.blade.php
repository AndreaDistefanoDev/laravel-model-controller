@props(['movie'])

<div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch text-white">
    <div class="card w-100 bg-dark text-white border-secondary border-opacity-25 rounded-3 shadow">

        <div class="card-header border-0 bg-transparent pt-4 pb-0">
            <h3 class="card-title fw-bold mb-1 text-truncate " title="{{ $movie->title }}">{{ $movie->title }}</h3>
            <p class="text-white-50 small fst-italic mb-0 text-truncate">({{ $movie->original_title }})</p>
        </div>

        <div class="card-body d-flex flex-column justify-content-between pt-3 pb-4">
            <div class="mb-3">
                <span class="badge bg-secondary text-uppercase font-monospace me-2">{{ $movie->nationality }}</span>
                <span class="text-white-50 small">{{ $movie->date }}</span>
            </div>

            <div
                class="mt-auto d-flex align-items-center justify-content-between pt-2 border-top border-secondary border-opacity-25">
                <small class="text-uppercase text-muted fw-semibold" style="letter-spacing: 0.5px;">Valutazione</small>
                <div class="bg-warning text-dark px-3 py-1 rounded-pill fw-bold shadow-sm">
                    ⭐ {{ $movie->vote }}
                </div>
            </div>
        </div>

    </div>
</div>
