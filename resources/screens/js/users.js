document.addEventListener("DOMContentLoaded", () => {
  // Sample user data
  const users = [
    {
      id: "1",
      name: "Elizabeth King",
      email: "biziabethking.com",
      status: "Verified",
      statusType: "verified",
      type: "advertiser",
    },
    {
      id: "2",
      name: "Richard Harris",
      email: "rking@mariloc.com",
      status: "Radio Station",
      statusType: "radio",
      type: "media",
    },
    {
      id: "3",
      name: "Thomas Wright",
      email: "thomas@acvoio.com",
      status: "Newspaper",
      statusType: "newspaper",
      type: "media",
    },
    {
      id: "4",
      name: "Sarah Evans",
      email: "sarah@ewsogc.com",
      status: "Content Creator",
      statusType: "content",
      type: "media",
    },
    {
      id: "5",
      name: "Laura Adams",
      email: "laura@amabac.com",
      status: "Activate",
      statusType: "activate",
      type: "advertiser",
    },
    {
      id: "6",
      name: "Michael Johnson",
      email: "michael@mediagroup.com",
      status: "Verified",
      statusType: "verified",
      type: "advertiser",
    },
    {
      id: "7",
      name: "Jennifer Wilson",
      email: "jennifer@newstoday.com",
      status: "Newspaper",
      statusType: "newspaper",
      type: "media",
    },
  ]

  // Function to get badge class based on status type
  function getStatusBadgeClass(statusType) {
    switch (statusType) {
      case "verified":
        return "badge-verified"
      case "radio":
        return "badge-radio"
      case "newspaper":
        return "badge-newspaper"
      case "content":
        return "badge-content"
      case "activate":
        return "badge-activate"
      default:
        return "bg-secondary"
    }
  }

  // Function to get action buttons based on status type
  function getActionButtons(user) {
    switch (user.statusType) {
      case "verified":
      case "radio":
        return `
          <div class="d-flex flex-wrap gap-2">
            <button class="btn btn-primary btn-sm">View</button>
            <button class="btn btn-outline-secondary btn-sm">Deactivate</button>
          </div>
        `
      case "newspaper":
      case "content":
        return `
          <div class="d-flex flex-wrap gap-2">
            <button class="btn btn-primary btn-sm">View</button>
            <button class="btn btn-outline-secondary btn-sm">Reply</button>
          </div>
        `
      case "activate":
        return `
          <div class="d-flex flex-wrap gap-2">
            <button class="btn btn-primary btn-sm">View</button>
            <button class="btn btn-outline-secondary btn-sm">Resolve</button>
          </div>
        `
      default:
        return `<button class="btn btn-primary btn-sm">View</button>`
    }
  }

  // Function to render users table
  function renderUsersTable(userType) {
    const filteredUsers = users.filter((user) => user.type === userType)
    const tableBodyId = userType === "advertiser" ? "advertisersTableBody" : "mediaTableBody"
    const tableBody = document.getElementById(tableBodyId)

    if (!tableBody) return

    tableBody.innerHTML = ""

    if (filteredUsers.length === 0) {
      const emptyRow = document.createElement("tr")
      emptyRow.innerHTML = `
        <td colspan="4" class="text-center py-4 text-muted">
          No ${userType}s found
        </td>
      `
      tableBody.appendChild(emptyRow)
      return
    }

    filteredUsers.forEach((user) => {
      const row = document.createElement("tr")
      row.innerHTML = `
        <td class="align-middle py-3">${user.name}</td>
        <td class="align-middle py-3">${user.email}</td>
        <td class="align-middle py-3">
          <span class="badge rounded-pill ${getStatusBadgeClass(user.statusType)} px-3 py-2">${user.status}</span>
        </td>
        <td class="align-middle py-3">
          ${getActionButtons(user)}
        </td>
      `
      tableBody.appendChild(row)
    })
  }

  // Initial render
  renderUsersTable("advertiser")
  renderUsersTable("media")

  // Tab change event listeners
  const userTabs = document.getElementById("userTabs")
  if (userTabs) {
    userTabs.addEventListener("shown.bs.tab", (event) => {
      const targetId = event.target.getAttribute("data-bs-target").substring(1)
      const userType = targetId === "advertisers" ? "advertiser" : "media"
      renderUsersTable(userType)
    })
  }

  // Search functionality
  const searchInput = document.querySelector(".search-container input")
  if (searchInput) {
    searchInput.addEventListener("input", (e) => {
      const searchTerm = e.target.value.toLowerCase()

      // Filter users based on search term
      const filteredAdvertisers = users.filter(
        (user) =>
          user.type === "advertiser" &&
          (user.name.toLowerCase().includes(searchTerm) ||
            user.email.toLowerCase().includes(searchTerm) ||
            user.status.toLowerCase().includes(searchTerm)),
      )

      const filteredMedia = users.filter(
        (user) =>
          user.type === "media" &&
          (user.name.toLowerCase().includes(searchTerm) ||
            user.email.toLowerCase().includes(searchTerm) ||
            user.status.toLowerCase().includes(searchTerm)),
      )

      // Update tables
      const advertisersTableBody = document.getElementById("advertisersTableBody")
      const mediaTableBody = document.getElementById("mediaTableBody")

      if (advertisersTableBody) {
        advertisersTableBody.innerHTML = ""

        if (filteredAdvertisers.length === 0) {
          const emptyRow = document.createElement("tr")
          emptyRow.innerHTML = `
            <td colspan="4" class="text-center py-4 text-muted">
              No advertisers found matching "${searchTerm}"
            </td>
          `
          advertisersTableBody.appendChild(emptyRow)
        } else {
          filteredAdvertisers.forEach((user) => {
            const row = document.createElement("tr")
            row.innerHTML = `
              <td class="align-middle py-3">${user.name}</td>
              <td class="align-middle py-3">${user.email}</td>
              <td class="align-middle py-3">
                <span class="badge rounded-pill ${getStatusBadgeClass(user.statusType)} px-3 py-2">${user.status}</span>
              </td>
              <td class="align-middle py-3">
                ${getActionButtons(user)}
              </td>
            `
            advertisersTableBody.appendChild(row)
          })
        }
      }

      if (mediaTableBody) {
        mediaTableBody.innerHTML = ""

        if (filteredMedia.length === 0) {
          const emptyRow = document.createElement("tr")
          emptyRow.innerHTML = `
            <td colspan="4" class="text-center py-4 text-muted">
              No media found matching "${searchTerm}"
            </td>
          `
          mediaTableBody.appendChild(emptyRow)
        } else {
          filteredMedia.forEach((user) => {
            const row = document.createElement("tr")
            row.innerHTML = `
              <td class="align-middle py-3">${user.name}</td>
              <td class="align-middle py-3">${user.email}</td>
              <td class="align-middle py-3">
                <span class="badge rounded-pill ${getStatusBadgeClass(user.statusType)} px-3 py-2">${user.status}</span>
              </td>
              <td class="align-middle py-3">
                ${getActionButtons(user)}
              </td>
            `
            mediaTableBody.appendChild(row)
          })
        }
      }
    })
  }
})
