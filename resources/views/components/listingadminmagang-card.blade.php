@props(['listingmagang'])
<div class="job-listingmagang-container" style="margin-bottom: 1.25rem; margin-left: 0.5rem;">
   <div>
     <div style="display: flex; align-items: center; border: 1px solid #d1d5db; border-radius: 0.5rem; padding: 1rem; background-color: white; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);">
       <img style="width: 4rem; height: 4rem; margin-right: 1rem; object-fit: cover; border-radius: 9999px;"
          src="{{ $listingmagang->Logo ? asset('/storage/imglogo/' . $listingmagang->Logo) : asset('/images/no-image.png') }}" alt="Company Logo" />
       <div style="flex-grow: 1;">
        <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.25rem;">
          <button type="button" style="background: none; border: none; color: inherit; text-decoration: none; padding: 0; cursor: pointer;"
            data-bs-toggle="modal" data-bs-target="#dialogShowLogangAdmin" data-id="{{ $listingmagang->id }}" data-bs-remote="{{ route('logangadmin.showAdmin', $listingmagang->id) }}">
            <b>{{ $listingmagang->Posisi }}</b>
          </button>
        </h3>
         <div style="color: #4b5563; margin-bottom: 0.5rem;">{{ $listingmagang->NamaPerusahaan }}</div>
         <x-listingadminmagang-tags :tagsCsv="$listingmagang->Tags" />
         <div style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem;">
           <i class="fa-solid fa-location-dot"></i> {{ $listingmagang->Alamat }}
         </div>
         <div style="font-size: 0.875rem; color: #6b7280; margin-top: 0.25rem;">Gaji: {{ $listingmagang->Gaji }}
         </div>
       </div>
       <div style="display: flex; flex-direction: column; align-items: flex-end;">
         <span style="background-color: #d1fae5; color: #065f46; font-size: 0.75rem; font-weight: 600; 
              padding: 0.25rem 1rem; border-radius: 0.5rem; width: 8rem; text-align: center; margin-bottom: 0.5rem;">
           {{ $listingmagang->TipeMagang }}
         </span>
         <span style="background-color: #fecaca; color: #991b1b; font-size: 0.75rem; font-weight: 600; 
              padding: 0.25rem 1rem; border-radius: 0.5rem; width: 8rem; text-align: center;">
           {{ $listingmagang->Pengalaman }}
         </span>
       </div>
    </div>
  </div>
</div>
<!-- Modal for Show Logang -->
<div class="modal fade" id="dialogShowLogangAdmin" tabindex="-1" aria-labelledby="dialogShowLogangAdminLabel" aria-hidden="true">
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
