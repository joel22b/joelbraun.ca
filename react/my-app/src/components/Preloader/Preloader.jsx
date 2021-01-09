import './Preloader.css';

function Preloader() {
    return (
        <div className="loading animated">
            <div className="progress-bar">
                <span></span>
            </div>
        </div>
    );
}

export default Preloader;