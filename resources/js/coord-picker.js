import L from "leaflet";

export default function coordPicker(args) {
    return {
        state: args.state,
        mode: 'light',
        open: false,
        map: null,
        marker: null,
        init: function () {
            this.map = L.map(this.$refs.map);
            const self = this;
            this.map.on('load', function () {
                setTimeout(() => {
                    self.map.invalidateSize();
                }, 10);
            });
            if (this.state.lat && this.state.lon) {
                this.map.setView([this.state.lat, this.state.lon], 13);
                L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
                    maxZoom: 17,
                    attribution: 'Dati: © OpenStreetMap-Mitwirkende, SRTM | Base: © OpenTopoMap (CC-BY-SA) '
                }).addTo(this.map);
                this.marker = new L.marker([this.state.lat, this.state.lon]).addTo(this.map);
                this.map.on('click', (e) => {
                    self.map.removeLayer(self.marker);
                    self.marker = new L.marker(e.latlng).addTo(self.map);
                    //    self.map.setView(e.latlng);
                    self.state.lat = e.latlng.lat;
                    self.state.lon = e.latlng.lng;
                    self.map.invalidateSize();
                });
            }
        },
        refresh: function () {
            this.map.invalidateSize();
        },

    }
}
