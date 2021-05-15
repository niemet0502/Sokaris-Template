import React from 'react'
import "./Sidebar.css"
function SidebarItem({Icon,text,link,active}) {
  return (
    <div className={"sidebarItem "+ `${active}`}>
      <span>
        <Icon />
        <h6>{text}</h6>
      </span>
    </div>
  )
}

export default SidebarItem
