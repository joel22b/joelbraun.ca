import './ContactBar.css';

import contacts from '../../generic/data/contact.json';

function ContactBar() {
    return (
        <div className="ContactBar  ContactBar-icon-background">
            <div className="ContactBar-flex-container">
                {
                    contacts.contactMethods.map((contact, i) => {
                        return <div className="ContactBar-icon-spacing" key={i}>
                            <a href={contact.link} rel="noreferrer" target="_blank" title={contact.name}>
                                <i className={contact.icon}/>
                            </a>
                        </div>
                    })
                }
            </div>
        </div>
    );
}

export default ContactBar;