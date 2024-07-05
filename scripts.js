/* document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('nav ul li a');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = e.target.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);

            window.scrollTo({
                top: targetSection.offsetTop - 50, // Adjust for fixed header height
                behavior: 'smooth'
            });
        });
    });
});

const token = 'YOUR_DISCORD_BOT_TOKEN';
const staffIds = ['USER_ID_1', 'USER_ID_2']; // Add your staff member IDs here

const fetchUserData = async (userId) => {
    const response = await fetch(`https://discord.com/api/v10/users/${userId}`, {
        headers: {
            'Authorization': `Bot ${token}`
        }
    });
    const data = await response.json();
    return data;
};

const displayProfile = (user) => {
    const profileContainer = document.querySelector('.profiles-container');
    const profileElement = document.createElement('div');
    profileElement.className = 'profile-card';
    profileElement.innerHTML = `
        <img src="https://cdn.discordapp.com/avatars/${user.id}/${user.avatar}.png" alt="${user.username}" class="profile-avatar">
        <div class="profile-info">
            <h2 class="profile-name">${user.username}#${user.discriminator}</h2>
            <p class="profile-status">Doing nothing rn</p>
        </div>
    `;
    profileContainer.appendChild(profileElement);
};

const init = async () => {
    for (const id of staffIds) {
        const userData = await fetchUserData(id);
        displayProfile(userData);
    }
};

init(); */