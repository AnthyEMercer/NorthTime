import React from 'react';
import ReactDOM from 'react-dom';

function nameFind() {
    return name.fn + name.mn + name.ln;
}

const name = {
    fn:'Anthy',
    mn:'E',
    ln:'Mercer'
};
function Clock(props) {
    return (
        <p>
            {props.date.toLocaleString()}
        </p>
    );
}

function work() {
    return (
        <p>Welcome,{nameFind()}!Now is {<Clock date={new Date()} />}</p>
        );
}

function tick(){
    ReactDOM.render(
        work(),
        document.getElementById('root')
    );
}

setInterval(tick,1000);