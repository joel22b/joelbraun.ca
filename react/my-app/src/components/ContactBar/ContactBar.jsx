import './ContactBar.css';

function ContactBar() {
    return (
        <div className="ContactBar  ContactBar-icon-background">
            <div className="ContactBar-flex-container">
                <div className="ContactBar-icon-spacing">
                    <a href="https://www.github.com/joel22b" rel="noreferrer" target="_blank">
                        <i class="fab fa-github-square fa-2x"/>
                    </a>
                </div>
                <div className="ContactBar-icon-spacing">
                    <a href="https://www.linkedin.com/in/joel-braun" rel="noreferrer" target="_blank">
                        <i className="fab fa-linkedin fa-2x"/>
                    </a>
                </div>
                <div className="ContactBar-icon-spacing">
                    <a href="https://www.instagram.com/joel22b" rel="noreferrer" target="_blank">
                        <i class="fab fa-instagram fa-2x"/>
                    </a>
                </div>
                <div className="ContactBar-icon-spacing">
                    <i className="far fa-envelope fa-2x ContactBar-icon-size"/>
                </div>
            </div>
        </div>
    );
}

export default ContactBar;