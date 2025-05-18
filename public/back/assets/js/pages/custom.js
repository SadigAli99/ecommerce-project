'use strict'

let token = document.querySelector('meta[name="csrf_token"]').getAttribute('content');

function convert_letter(item) {
    item.value = item.value.replace(/[^a-zA-ZğüşıöəƏçĞÜŞİÖÇn _]/g, "");
}

function convert_numeric(item) {
    let cleaned = item.value.replace(/[^0-9.]/g, '');
    const parts = cleaned.split('.');
    if (parts.length > 2) {
        cleaned = parts[0] + '.' + parts.slice(1).join('');
    }
    if (!cleaned.includes('.') && cleaned.startsWith('0') && cleaned.length > 1) {
        cleaned = cleaned.replace(/^0+/, '');
    }

    item.value = cleaned;
}

function convert_alphanumeric(item) {
    item.value = item.value.replace(/[^a-zA-Z0-9 ]/g, "");
}

function sort(tables) {
    const table = document.getElementById('sortable-table').querySelector('tbody');
    new Sortable(table, {
        animation: 150,
        handle: 'tr',
        onEnd: function (evt) {
            const sortedIDs = Array.from(table.querySelectorAll('tr')).map(row => row.dataset.id);
            let url = `/admin/${tables}/sort`;
            fetch(url, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'content-type': 'application/json',
                },
                body: JSON.stringify({
                    '_token': token,
                    'sorted_ids': sortedIDs,
                })
            })
                .then(res => res.json())
                .then(data => {
                    if (data.status == 'success') {
                        toastr.success(data.message);
                    } else {
                        console.error(data.message);
                    }
                });
        }
    });
}

function delete_item(item) {
    event.preventDefault();
    let url = item.getAttribute('href');
    Swal.fire({
        title: "Silmək istədiyinizdən əminsiniz mi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Bəli, sil!",
        cancelButtonText: "Xeyr, silmə!",
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(url, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    '_token': token,
                })
            })
                .then(res => res.json())
                .then(data => {
                    if (data.status == 'success') {
                        Swal.fire({
                            title: "Silindi!",
                            text: data.message,
                            icon: "success"
                        });

                        setInterval(() => window.location.reload(), 1500);
                    } else {
                        Swal.fire({
                            title: "Silinmədi!",
                            text: data.messsage,
                            icon: "error"
                        });
                    }
                });
        }
    });
}

function change_status(item, table = 'language') {
    let id = item.getAttribute('data-id');
    let url = `/admin/${table}/${id}/change-status`;
    let status = item.checked ? 1 : 0;
    fetch(url, {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            '_token': token,
            'status': status,
        })
    })
        .then(res => res.json())
        .then(data => {
            if (data.status == 'success') toastr.success(data.message);
            else toastr.error(data.message);
        });
}
