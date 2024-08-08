<?php

namespace App\View\Components\footer\faq;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class question extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $qna)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer.faq.question');
    }
}
