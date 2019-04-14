import React from 'react'

const fact = (props) => {
  const {title, body} = props
  return (
    <div className='fact col-xs-2 col-sm-6 col-md-3'>
      <p>{title}</p>
      <h2>{body}</h2>
    </div>
  )
}

export default fact
