@props(['listing'])
<div class="job-listings-container" style="margin-bottom: 1.25rem; margin-left: 0.5rem;">
  <div>
    <div style="display: flex; align-items: center; border: 1px solid #d1d5db; border-radius: 0.5rem; padding: 1rem; background-color: white; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);">
      <img style="width: 4rem; height: 4rem; margin-right: 1rem; object-fit: cover; border-radius: 9999px; max-width: 64px; max-height: 64px;"
        src="{{ $listing->Logo ? asset('/storage/imglogo/' . $listing->Logo) : asset('/images/no-image.png') }}" alt="Company Logo" />
      <div style="flex-grow: 1;">
        <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.25rem;">
          {{-- <button type="button" class="btn btn-info me-2 text-white px-3 py-2 rounded-5" style="width: 100px; text-align: center;"  --}}
          <button type="button" style="background: none; border: none; color: inherit; text-decoration: none; padding: 0; cursor: pointer;"
            data-bs-toggle="modal" data-bs-target="#dialogShowLoker" data-id="{{ $listing->id }}" data-bs-remote="{{ route('loker.show', $listing->id) }}">
            {{ $listing->NamaPerusahaan }}
          </button>
        <div style="color: #4b5563; margin-bottom: 0.5rem;">{{ $listing->Posisi }}</div>
        <x-listing-tags :tagsCsv="$listing->Tags" />
        <div style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem;">
          <i class="fa-solid fa-location-dot"></i> {{ $listing->Alamat }}
        </div>
        <div style="font-size: 0.875rem; color: #6b7280; margin-top: 0.25rem;"> Pengalaman: {{ $listing->Pengalaman }}</div>
        <div style="font-size: 0.875rem; color: #6b7280; margin-top: 0.25rem;"> Gaji: {{ $listing->Gaji }}</div>
      </div>
      <div style="display: flex; flex-direction: column; align-items: flex-end;">
        <span style="background-color: #d1fae5; color: #065f46; font-size: 0.75rem; font-weight: 600; margin-right: 0.25rem; padding: 0.25rem 1rem; border-radius: 0.5rem; width: 8rem; text-align: center; margin-bottom: 0.5rem;">{{ $listing->TipeKerja }}</span>
        <span style="background-color: #fecaca; color: #991b1b; font-size: 0.75rem; font-weight: 600; margin-right: 0.25rem; padding: 0.25rem 1rem; border-radius: 0.5rem; width: 8rem; text-align: center;">{{ $listing->Pengalaman }}</span>
      </div>
    </div>
  </div>
</div>
<!-- Modal for Show Loker -->
<div class="modal fade" id="dialogShowLoker" tabindex="-1" aria-labelledby="dialogShowLokerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
          <!-- Content will be loaded dynamically -->
      </div>
  </div>
</div>
<script>
  // Add event listeners to dynamically load content into modals
  document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
      button.addEventListener('click', event => {
          const target = button.getAttribute('data-bs-target');
          const url = button.getAttribute('data-bs-remote');
          
          fetch(url)
              .then(response => response.text())
              .then(html => {
                  document.querySelector(target + ' .modal-content').innerHTML = html;
              });
      });
  });
</script>

