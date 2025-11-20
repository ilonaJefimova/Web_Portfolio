// Add and update
document.addEventListener ('DOMContentLoaded', function () {

    const createForm = document.querySelector ('#createModal form');
    if (createForm) attachFormHandler (createForm);

    const updateForms = document.querySelectorAll ('[id^="updateModal"] form');
    updateForms.forEach (form => attachFormHandler (form));
});

function attachFormHandler (form) {
    form.addEventListener ('submit', function(e) {
        e.preventDefault ();

        const formData = new FormData (this);

        fetch (this.action, {
            method: 'POST',
            body: formData
        })
        .then (res => res.json ())
        .then (data => {
            if(data.success) {
                Swal.fire ({
                    icon: 'success',
                    title: 'Success',
                    text: data.message,
                    timer: 1500,
                    showConfirmButton: false
                }).then (() => location.reload ());
            } else {
                Swal.fire ({
                    icon: 'error',
                    title: 'Error',
                    text: data.message
                });
            }
        })
        .catch (error => {
            Swal.fire({
                icon: 'error',
                title: 'Request Failed',
                text: 'Something went wrong!'
            });
        });
    });
}


// Delete
document.addEventListener('DOMContentLoaded', () => {

    window.deleteNews = function(id) {
        Swal.fire({
            title: 'Delete News?',
            text: "This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Delete',
            cancelButtonText: 'Cancel'
        }).then(result => {
            if (result.isConfirmed) {
                fetch(`../controller/delete_news.php?id=${id}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: data.message,
                            timer: 1500,
                            showConfirmButton: false
                        }).then(() => location.reload());
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Failed!',
                            text: data.message,
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Something went wrong.',
                    });
                });
            }
        });
    }
});
