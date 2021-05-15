import React from 'react'
import "./Topbar.css"
import user from "../../assets/images/user.jpg"
function Topbar() {
  return (
    <div className="Topbar">
      <div className="Topbar__search">
        <input type="text" name="" placeholder="Search here" id="" />
      </div>
      <div className="Topbar__badge">
        T
      </div>
      <div className="Topbar__user">
        Hello, &nbsp; <span>Marius</span> 
        <img src={user} alt="" />
      </div> 
    </div>
  )
}

export default Topbar
