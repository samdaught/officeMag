function MetricRow({ name, purpose, priority, value }) {
  return (
    <tr>
      <th scope="row">{name}</th>
      <td>{purpose}</td>
      <td>{priority}</td>
      <td><meter min="0" max="100" value={value}>{value}%</meter></td>
    </tr>
  );
}

export { MetricRow };
