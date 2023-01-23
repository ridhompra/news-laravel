import { Link, Head } from '@inertiajs/react';

export default function Homepage(props){
    return(
        <div className='flex justify-center items-center min-h-screen bg-neutral-700 text-white text-2xl'>
            <Head title={props.title}/>
            <p>{props.Description}</p>
        </div>
    )
}