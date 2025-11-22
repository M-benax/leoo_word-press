#!/usr/bin/env python3
import http.server
import socketserver
import webbrowser
import socket
from pathlib import Path

def find_free_port(start_port=8000):
    for port in range(start_port, start_port + 100):
        try:
            with socket.socket(socket.AF_INET, socket.SOCK_STREAM) as s:
                s.bind(('', port))
                return port
        except OSError:
            continue
    return None

PORT = find_free_port()
if not PORT:
    print("❌ No available ports found")
    exit(1)

Handler = http.server.SimpleHTTPRequestHandler

print(f"🚀 Starting demo server at http://localhost:{PORT}")
print("📁 Serving files from:", Path.cwd())

with socketserver.TCPServer(("", PORT), Handler) as httpd:
    print(f"✅ Demo live at: http://localhost:{PORT}")
    print("Press Ctrl+C to stop")
    
    # Auto-open browser
    webbrowser.open(f'http://localhost:{PORT}')
    
    try:
        httpd.serve_forever()
    except KeyboardInterrupt:
        print("\n🛑 Server stopped")