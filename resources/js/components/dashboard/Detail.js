import React from 'react'

const detail = (props) => {
  const {title, subtitle, body, hash, project, chart} = props
  return (
    <div className="wrapper">
      <div className="row">
        <div className="col-md">
          <h2>{title}</h2>
          <h4>{subtitle}</h4>
          <p>{body}</p>
          <br />
          <p>
            <img src="/img/logo-masarang.png" width="50px" />
          </p>
          <p>
            Project <br />
            <b style={{fontSize: '1.2em'}}>
                Masarang Foundation
            </b>
          </p>
          <p>
            BlockHash <br />
            <b style={{fontSize: '1.2em'}}>
              418f0d7f080844da996f586a5f9cabcffd949e7b61cd43b480ff48
            </b>
          </p>
        </div>

        <div className="col-md">
          {chart}
        </div>

        <div className="w-100"></div>
      </div>
    </div>
  )
}

export default detail
