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
          <p>Logo</p>
          <p>
            Project <br />
            {project}
          </p>
          <p>
            BlockHash <br />
            418f0d7f080844da996f586a5f9cabcffd949e7b61cd43b480ff48621810673c
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
