import './Footer.css';

import contacts from '../../generic/data/contact.json';

function Footer() {
    return (
        <div className='section bg--white Footer-box'>
            <h1 className="section-header Footer-title">Contact me!</h1>
            <div className='Footer-table'>
                {
                    contacts.contactMethods.map((contact, i) => {
                        return <div className='Footer-row'>
                            <a href={contact.link} rel="noreferrer" target="_blank" title={contact.name}>
                                <table>
                                    <tr>
                                        <td><i className={contact.icon}/></td>
                                        <td><p className='Footer-contact'>{contact.name}</p></td>
                                    </tr>
                                </table>
                            </a>
                        </div>
                    })
                }
            </div>
        </div>
    );
}

export default Footer;