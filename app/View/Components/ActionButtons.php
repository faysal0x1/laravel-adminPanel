<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButtons extends Component
{
    public $id;
    public $editRoute;
    public $deleteRoute;
    public $viewRoute;
    public $downloadRoute;
    public $pdfRoute;
    public $mailRoute;

    public $showView;
    public $showDownload;
    public $showPdf;
    public $showMail;

    /**
     * Create a new component instance.
     *
     * @param int $id
     * @param string|null $editRoute
     * @param string|null $deleteRoute
     * @param string|null $viewRoute
     * @param string|null $downloadRoute
     * @param string|null $pdfRoute
     * @param string|null $mailRoute
     * @param bool $showView
     * @param bool $showDownload
     * @param bool $showPdf
     * @param bool $showMail
     */
    public function __construct(
        int $id,
        ?string $editRoute = null,
        ?string $deleteRoute = null,     // Default is null for delete
        ?string $viewRoute = null,       // Default is null for view
        ?string $downloadRoute = null,   // Default is null for download
        ?string $pdfRoute = null,        // Default is null for pdf
        ?string $mailRoute = null,       // Default is null for mail
        bool $showView = false,          // Default is false for view button
        bool $showDownload = false,      // Default is false for download button
        bool $showPdf = false,           // Default is false for PDF button
        bool $showMail = false           // Default is false for mail button
    ) {
        $this->id = $id;
        $this->editRoute = $editRoute;
        $this->deleteRoute = $deleteRoute;
        $this->viewRoute = $viewRoute;
        $this->downloadRoute = $downloadRoute;
        $this->pdfRoute = $pdfRoute;
        $this->mailRoute = $mailRoute;

        $this->showView = $showView;
        $this->showDownload = $showDownload;
        $this->showPdf = $showPdf;
        $this->showMail = $showMail;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-buttons');
    }
}
