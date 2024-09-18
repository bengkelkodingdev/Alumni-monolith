@props(['listingmagang'])
<div class="job-listingmagang-container" style="margin-bottom: 1.25rem; margin-left: 0.5rem;">
  <div>
    <div style="display: flex; align-items: center; justify-content: space-between; border: 1px solid #d1d5db; border-radius: 0.5rem; padding: 1rem; background-color: white; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05); flex-wrap: wrap;">
      
      <!-- Bagian Gambar -->
      <img style="width: 4rem; height: 4rem; margin-right: 1rem; object-fit: cover; border-radius: 9999px;"
        src="{{ $listingmagang->Logo ? asset('/storage/imglogo/' . $listingmagang->Logo) : asset('/images/no-image.png') }}" alt="Company Logo" />

      <!-- Bagian Informasi Magang -->
      <div style="flex-grow: 1; max-width: 60%; margin-right: 1rem;">
        <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.25rem;">
          <button type="button" style="background: none; border: none; color: inherit; text-decoration: none; padding: 0; cursor: pointer;"
            data-bs-toggle="modal" data-bs-target="#dialogShowLogang" data-id="{{ $listingmagang->id }}" data-bs-remote="{{ route('logang.show', $listingmagang->id) }}">
            <b>{{ $listingmagang->Posisi }}</b>
          </button>
        </h3>
        <div style="color: #4b5563; margin-bottom: 0.5rem;">{{ $listingmagang->NamaPerusahaan }}</div>
        <x-listingmagang-tags :tagsCsv="$listingmagang->Tags" />
        <div style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem;">
          <i class="fa-solid fa-location-dot"></i> {{ $listingmagang->Alamat }}
        </div>
        <div style="font-size: 0.875rem; color: #6b7280; margin-top: 0.25rem;"> Pengalaman: {{ $listingmagang->Pengalaman }}</div>
        <div style="font-size: 0.875rem; color: #6b7280; margin-top: 0.25rem;"> Gaji: {{ $listingmagang->Gaji }}</div>
      </div>

      <!-- Bagian Label (Tipe Magang dan Pengalaman) -->
      <div style="display: flex; flex-direction: column; align-items: center;">
        <span style="background-color: #d1fae5; color: #065f46; font-size: 0.75rem; font-weight: 600; margin-bottom: 0.5rem; 
              padding: 0.25rem 1rem; border-radius: 0.5rem; text-align: center; width: 100px; display: inline-flex; justify-content: center; align-items: center;">
              {{ $listingmagang->TipeMagang }}
        </span>
        <span style="background-color: #fecaca; color: #991b1b; font-size: 0.75rem; font-weight: 600; 
              padding: 0.25rem 1rem; border-radius: 0.5rem; text-align: center; width: 100px; display: inline-flex; justify-content: center; align-items: center;">
              {{ $listingmagang->Pengalaman }}
        </span>
    </div>
    </div>
  </div>
</div>

<!-- Modal for Show Logang -->
<div class="modal fade" id="dialogShowLogang" tabindex="-1" aria-labelledby="dialogShowLogangLabel" aria-hidden="true">
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
