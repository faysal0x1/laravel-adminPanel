<div class="action-buttons">
    {{-- Edit Button --}}
    @if($editRoute)
        <a href="{{ route($editRoute, $id) }}" class="btn btn-primary">
            <i class="fas fa-edit"></i>
        </a>
    @endif

    {{-- Delete Button --}}
    @if($deleteRoute)
        <form action="{{ route($deleteRoute, $id) }}" method="POST" class="delete-form" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-danger" onclick="deleteAlert(event, '{{ $id }}')">
                <i class="fas fa-trash"></i>
            </button>
        </form>
    @endif

    {{-- View Button (Set default to false if not defined) --}}
    @if(isset($showView) && $showView && $viewRoute)
        <a href="{{ route($viewRoute, $id) }}" class="btn btn-info">
            <i class="fas fa-eye"></i>
        </a>
    @endif

    {{-- Download Button --}}
    @if(isset($showDownload) && $showDownload && $downloadRoute)
        <a href="{{ route($downloadRoute, $id) }}" class="btn btn-secondary">
            <i class="fas fa-download"></i>
        </a>
    @endif

    {{-- PDF Button --}}
    @if(isset($showPdf) && $showPdf && $pdfRoute)
        <a href="{{ route($pdfRoute, $id) }}" class="btn btn-warning">
            <i class="fas fa-file-pdf"></i>
        </a>
    @endif

    {{-- Mail Button --}}
    @if(isset($showMail) && $showMail && $mailRoute)
        <a href="{{ route($mailRoute, $id) }}" class="btn btn-success">
            <i class="fas fa-envelope"></i>
        </a>
    @endif
</div>
