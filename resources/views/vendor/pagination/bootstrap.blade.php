<div class=" pagination-box">
   <nav class="ms-auto me-auto " aria-label="...">
      <ul class="pagination pagination-primary">
         @if ($paginator->onFirstPage())
         <span class="page-item disabled" style="color:lightgray">
            {!! __('Précédent') !!}
         </span>
         @else
         <a href="{{ $paginator->previousPageUrl() }}">
            {!! __('Précédent ') !!}
         </a>
         @endif



         @if ($paginator->hasMorePages())
         <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="mx-5 page-item"
            aria-label="{{ __('Suivant') }}">
            {!! __('pagination.next') !!}
         </a>
         @else
         <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
            <span class="mx-5 page-item disabled" aria-hidden="true" style="color:lightgray">
               {!! __('Suivant') !!}
            </span>
         </span>
         @endif
      </ul>
   </nav>
</div>