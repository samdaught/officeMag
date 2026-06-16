function SchemePath({ d, arrow = false }) {
  return <path className="scheme-line" d={d} markerEnd={arrow ? 'url(#react-scheme-arrow)' : undefined} />;
}

export { SchemePath };
