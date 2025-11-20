// Function to open a modal
function openModal (id) 
{
    document.getElementById (id).classList.add ('show');
}

// Function to close a modal
function closeModal(id) 
{
    document.getElementById (id).classList.remove ('show');
}

// Close modal when clicking outside
window.onclick = function (event) 
{
    document.querySelectorAll ('.modal-custom').forEach (modal => {
        if (event.target === modal) 
        {
            modal.classList.remove ('show');
        }
    });
}
