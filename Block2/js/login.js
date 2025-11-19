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

// Check if password and confirm password match
function checkPasswordMatch() 
{
    const password = document.getElementById ('password');
    const confirm = document.getElementById ('confirm_password');
    const message = document.getElementById ('message');

    if (password.value === confirm.value && password.value !== "") 
    {
        message.style.color = 'green';
        message.textContent = 'Passwords match';
    } 
    else 
    {
        message.style.color = 'red';
        message.textContent = 'Passwords do not match';
    }
}
