@props(['listing'])
<div class="job-listings-container" style="margin-bottom: 1.25rem; margin-left: 0.5rem;">
  <div>
    <div style="display: flex; align-items: center; border: 1px solid #d1d5db; border-radius: 0.5rem; padding: 1rem; background-color: white; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);">
      <img style="width: 4rem; height: 4rem; margin-right: 1rem; object-fit: cover; border-radius: 9999px; max-width: 64px; max-height: 64px;"
        src="{{ $listing->Logo ? asset('/storage/imglogo/' . $listing->Logo) : asset('/images/no-image.png') }}" alt="Company Logo" />
      <div style="flex-grow: 1;">
        <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.25rem;">
          <button type="button" style="background: none; border: none; color: inherit; text-decoration: none; padding: 0; cursor: pointer;"
            class="btn btn-link" data-bs-toggle="modal" data-bs-target="#dialogShowHomeLoker" data-id="{{ $listing->id }}">
            {{ $listing->NamaPerusahaan }}
          </button>
        </h3>
        <div style="color: #4b5563; margin-bottom: 0.5rem;">{{ $listing->Posisi }}</div>
        <x-listing-tags :tagsCsv="$listing->Tags" />
        <div style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem;">
          <i class="fa-solid fa-location-dot"></i> {{ $listing->Alamat }}
        </div>
        <div style="font-size: 0.875rem; color: #6b7280; margin-top: 0.25rem;"> Pengalaman: {{ $listing->Pengalaman }}
        </div>
        <div style="font-size: 0.875rem; color: #6b7280; margin-top: 0.25rem;"> Gaji: {{ $listing->Gaji }}
        </div>
      </div>
      <div style="display: flex; flex-direction: column; align-items: flex-end;">
        <span style="background-color: #d1fae5; color: #065f46; font-size: 0.75rem; font-weight: 600;
                    margin-right: 0.25rem; padding: 0.25rem 1rem; border-radius: 0.5rem; width: 8rem; text-align: center;
                    margin-bottom: 0.5rem;">{{ $listing->TipeKerja }}</span>
        <span style="background-color: #fecaca; color: #991b1b; font-size: 0.75rem; font-weight: 600;
                    margin-right: 0.25rem; padding: 0.25rem 1rem; border-radius: 0.5rem; width: 8rem; text-align: center;">
                    {{ $listing->Pengalaman }}
        </span>
      </div>
    </div>
  </div>
</div>
<!-- Dialog Info Show -->
@include('alumni.loker.showHome')

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var detailModal = document.querySelector('#dialogShowHomeLoker');

    detailModal.addEventListener('show.bs.modal', function(event) {
      var button = event.relatedTarget;
      var lokerId = button.getAttribute('data-id');
      console.log(lokerId);

      fetch('/logbook/' + lokerId)
        .then(response => response.json())
        .then(data => {
          detailModal.querySelector('.text-2xl').textContent = data.Posisi;
          detailModal.querySelector('.text-center p').textContent = data.NamaPerusahaan;
          detailModal.querySelector('.fa-location-dot').nextSibling.textContent = " " + data.Alamat;
          detailModal.querySelector('.space-y-6').innerHTML = nl2br(e(data.Deskripsi));
          detailModal.querySelector('.btn-primary[href^="mailto:"]').setAttribute('href', 'mailto:' + data.Email);
          detailModal.querySelector('.btn-primary[href^="http"]').setAttribute('href', data.Website);

          var tagsContainer = detailModal.querySelector('.flex .tags');
          tagsContainer.innerHTML = '';
          data.Tags.split(',').forEach(tag => {
            var tagElement = document.createElement('x-listing-tags');
            tagElement.setAttribute('tagsCsv', tag.trim());
            tagsContainer.appendChild(tagElement);
          });

          var logoImg = detailModal.querySelector('img');
          logoImg.setAttribute('src', data.Logo ? '/storage/imglogo/' + data.Logo : '/images/no-image.png');
        })
        .catch(error => console.error('Error:', error));
    });
  });

  function nl2br(str) {
    return str.replace(/\n/g, '<br>');
  }

  function e(str) {
    var div = document.createElement('div');
    div.appendChild(document.createTextNode(str));
    return div.innerHTML;
  }
</script>
